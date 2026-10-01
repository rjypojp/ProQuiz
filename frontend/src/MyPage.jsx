import { useState, useEffect } from 'react'
import { Link } from 'react-router-dom';
import './MyPage.css'

function MyPage({ user, setUser }) {

    const categoryMap = {
        1: 'Python',
        2: 'PHP',
        3: 'SQL',
        4: 'Git',
        5: 'Docker',
    }

    const modeMap = {
        normal: '通常クイズ',
        random: 'ランダムクイズ',
        comprehensive: '総合テスト'
    }
    
    const [quizResults, setQuizResults] = useState([])
    const [allQuizResults, setAllQuizResults] = useState([])
    const handleLogout = async () => {
        console.log('ログアウトボタン押された')

        const xsrfToken = decodeURIComponent(
            document.cookie
                .split('; ')
                .find(row => row.startsWith('XSRF-TOKEN='))
                ?.split('=')[1] || ''
        )

        await fetch('http://localhost:8000/logout', {
            method: 'POST',
            headers: {
                'X-XSRF-TOKEN': xsrfToken,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            },
            credentials: 'include',
            redirect: 'manual',
        })

        setUser(null)
    }
    
    useEffect(() => {

        const getQuizResults = async () => {
            const response = await fetch('http://localhost:8000/logout', {
                method: 'POST',
                headers: {
                    'X-XSRF-TOKEN': xsrfToken,
                },
                credentials: 'include',
                redirect:'manual',
            })

            const data = await response.json()
            console.log(data.map(result => ({
                id: result.id,
                category_id: result.category_id,
                mode: result.mode,
            })))
            setAllQuizResults(data)

            setQuizResults(
                data
                    .sort((a, b) => new Date(b.created_at) - new Date(a.created_at))
                    .slice(0, 30)
            )
        }

        getQuizResults()
    }, [])

    const challengeCount = allQuizResults.length

    const answeredCount = allQuizResults.reduce((total, result) => {
        return total + result.total_questions
    }, 0)

    const totalCorrect = allQuizResults.reduce((total, result) => {
        return total + result.correct_count
    }, 0)

    const averageAccuracy = Math.round(totalCorrect / answeredCount * 100)

    const bestScores = {}

    allQuizResults.forEach((result) => {
        if (result.mode === 'comprehensive') return

        const accuracy = Math.round(
            result.correct_count / result.total_questions * 100
        )

        
        const category = result.category_id

        if(bestScores[category] === undefined) {
           bestScores[category] = accuracy
        }
        else if (accuracy > bestScores[category]) {
            bestScores[category] = accuracy
        }
    })

    return (
        <div>
            <div className="quiz-navigation">
                <Link to="/">トップページ</Link>
                <Link to="/quiz">クイズ</Link>
                
                {user ? (
                    <button onClick={handleLogout}>ログアウト</button>
                ) : (
                    <Link to="/login">ログイン</Link>
                )}
            </div>

            <h2 className="mypage-title">マイページ</h2>

            <h3 className="summary-title">学習サマリー</h3>

            <div className="summary-container">
                <p>
                    <span>挑戦回数</span>
                    <strong>{challengeCount}回</strong>
                </p>
                
                <p>
                    <span>解答問題数</span>
                    <strong>{answeredCount}問</strong>
                </p>

                <p>
                    <span>平均正答率</span>
                    <strong>{averageAccuracy}%</strong>

                </p>
            </div>

            <h3 className="summary-title">ベストスコア</h3>

            <div className="best-scores-container">
                {Object.entries(bestScores).map(([category, score]) => (
                    <div className="best-score-card" key={category}>
                        <span>{categoryMap[category]}</span>
                        <strong>{score}%</strong>
                    </div>
                ))}
            </div>
            
            <h3 className="results-title">クイズ結果</h3>

            <div className="results-container">
            
                {quizResults.map((result, index) => {
                    const date = new Date(result.created_at)

                    return (
                        <div className="result-card" key={result.id}>
                            <span className="pixel-deco">♦</span>
                            {index === 0 && <span className="new-badge">NEW!!</span>}
                            <p className="quiz-mode">{modeMap[result.mode]}</p>
                            <p className="category">{categoryMap[result.category_id]}</p>
                            <p className="score">{result.correct_count} / {result.total_questions}</p>
                            <p className="accuracy">正答率: {Math.round(result.correct_count / result.total_questions * 100)}%</p>
                            <p>挑戦日時: {date.toLocaleString('ja-JP', {
                                year: 'numeric',
                                month: 'numeric',
                                day: 'numeric',
                                hour: 'numeric',
                                minute: 'numeric'
                            })}</p>

                            <span className="pixel-deco-right">▸</span>
                        </div>
                    )
                })}
            </div>
        </div>
    )
}

export default MyPage