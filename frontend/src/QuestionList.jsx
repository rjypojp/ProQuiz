import { useState } from 'react';
import { useEffect } from 'react';
import { Link } from 'react-router-dom';
import logo from './ProQuiz-logo.png';
import './QuestionList.css';

function QuestionList({ user, setUser }) {
    const [questions, setQuestions] = useState([]);
    const [selectedChoice, setSelectedChoice] = useState(null);
    const [answeredChoice, setAnsweredChoice] = useState(null);
    const [isAnswered, setIsAnswered] = useState(false);
    const [currentQuestionIndex, setCurrentQuestionIndex] = useState(0);
    const [quizResultId, setQuizResultId] = useState(null);
    const [correctCount, setCorrectCount] = useState(0);
    const [shuffledChoices, setShuffledChoices] = useState([]);

    const currentQuestion = questions[currentQuestionIndex];
    const choices = currentQuestion?.choices;
    const correctChoice = choices?.find(choice => choice.is_correct === 1);

    const [isFinished, setIsFinished] = useState(false);
    const [isStarted, setIsStarted] = useState(false);
    const [quizMode, setQuizMode] = useState(null);
    const [category, setCategory] = useState(null);
    const [isComprehensiveTest, setIsComprehensiveTest] = useState(false);

    const categories = {
        1: "Python",
        2: "PHP",
        3: "SQL",
        4: "Git",
        5: "Docker",
    };

    const handleLogout = async () => {

        const xsrfToken = decodeURIComponent(
            document.cookie
                .split('; ')
                .find(row => row.startsWith('XSRF-TOKEN='))
                ?.split('=')[1] || ''
        );

        await fetch('http://localhost:8000/logout', {
            method: 'POST',
            headers: {
                'X-XSRF-TOKEN': xsrfToken,
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            },
            credentials: 'include',
            redirect: 'manual',
        });

        setUser(null);
    };

    useEffect(() => {
        if (choices) {
            setShuffledChoices(
                [...choices].sort(() => Math.random() - 0.5)
            );
        }
    }, [choices]);


    if (!isStarted) {
        return (
            <>  
                <div className="quiz-navigation">
                    <Link to="/">トップページ</Link>

                    {user ? (
                        <>
                            <Link to="/mypage">マイページ</Link>
                            <button onClick={handleLogout}>ログアウト</button>
                        </>
                    ) : (
                        <>
                            <Link to="/register">新規登録</Link>
                            <Link to="/login">ログイン</Link>
                        </>
                    )}
                </div>
                <img className="quiz-logo" src={logo} alt="ProQuiz" />

                <p className="section-title">カテゴリを選んでください</p>

                <div className="category-select">

                    <button 
                        className={category === 1 ? "selected" : ""}
                        onClick={() => setCategory(category === 1 ? null : 1)}
                        disabled={isComprehensiveTest}
                    >
                        Python
                    </button>

                    <button 
                        className={category === 2 ? "selected" : ""}
                        onClick={() => setCategory(category === 2 ? null : 2)}
                        disabled={isComprehensiveTest}
                    >
                        PHP
                    </button>

                    <button 
                        className={category === 3 ? "selected" : ""}
                        onClick={() => setCategory(category === 3 ? null : 3)}
                        disabled={isComprehensiveTest}
                    >
                        SQL
                    </button>

                    <button 
                        className={category === 4 ? "selected" : ""}
                        onClick={() => setCategory(category === 4 ? null : 4)}
                        disabled={isComprehensiveTest}
                    >
                        Git
                    </button>

                    <button 
                        className={category === 5 ? "selected" : ""}
                        onClick={() => setCategory(category === 5 ? null : 5)}
                        disabled={isComprehensiveTest}
                    >
                        Docker
                    </button>

                <div className="comprehensive-wrapper">
                    <button 
                        className={`comprehensive-button ${isComprehensiveTest ? "selected" : ""}`}
                        onClick={() => {
                            if (isComprehensiveTest) {
                                setIsComprehensiveTest(false);
                            } else {
                                setCategory(null);
                                setQuizMode(null);
                                setIsComprehensiveTest(true);
                            }
                        }}
                    >
                        総合テスト(ランダム10問)
                    </button>
                </div>

            </div>


                <p className="section-title mode-title">モードを選んでください</p>

                <div className="mode-select">

                <button
                    className={quizMode === "normal" ? "selected" : ""} 
                    onClick={() => setQuizMode("normal")}
                    disabled={isComprehensiveTest}
                >
                    通常モード
                </button>

                <button
                    className={quizMode === "random" ? "selected" : ""} 
                    onClick={() => setQuizMode("random")}
                    disabled={isComprehensiveTest}
                >
                    ランダムモード
                </button>
            
            </div>
            
            <div className="selection-info-container">

                {category && (
                    <p className="selection-info first">
                        カテゴリ：{categories[category]}
                    </p>
                )}

                {quizMode && (
                    <p className="selection-info">
                        {quizMode === "normal"
                            ? "モード：通常"
                            : "モード：ランダム"}
                    </p>
                )}

                {isComprehensiveTest && (
                    <p className="selection-info">
                        総合テスト(ランダム10問)
                    </p>
                )}
            
            </div>


                <button
                    className="start-button"
                    disabled={!isComprehensiveTest && (category === null || quizMode === null)}
                    onClick={async () => {
                        await fetch("http://localhost:8000/sanctum/csrf-cookie",{
                            credentials: "include",
                        });

                        const xsrfToken = decodeURIComponent(
                            document.cookie
                                .split('; ')
                                .find(row => row.startsWith('XSRF-TOKEN='))
                                ?.split('=')[1] || ''
                        )

                        setCurrentQuestionIndex(0);
                        setSelectedChoice(null);
                        if (isComprehensiveTest) {
                            fetch("http://127.0.0.1:8000/api/comprehensive_test")
                                .then(response => response.json())
                                .then(data => {
                                    setQuestions(data);

                                    fetch("http://localhost:8000/api/quiz-results", {
                                        method: "POST",
                                        credentials: "include",
                                        headers: {
                                            "Content-Type": "application/json",
                                            "X-XSRF-TOKEN": xsrfToken,
                                        },
                                        body: JSON.stringify({
                                            correct_count: 0,
                                            total_questions: data.length,
                                            mode: "comprehensive",
                                            category_id: category,
                                        }),
                                    })
                                    .then(response => {
                                        return response.json();
                                    })
                                    .then(data => {
                                        setQuizResultId(data.id);
                                    });
                                });
                        } else {
                           fetch(`http://127.0.0.1:8000/api/questions/${category}`)
                            .then(response => response.json())
                            .then(data => {

                                if (quizMode === "random") {
                                    data = [...data].sort(
                                        () => Math.random() - 0.5
                                    );
                                }

                                setQuestions(data);

                                fetch("http://localhost:8000/api/quiz-results", {
                                    method: "POST",
                                    credentials: "include",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-XSRF-TOKEN": xsrfToken,
                                    },
                                    body: JSON.stringify({
                                        correct_count: 0,
                                        total_questions: data.length,
                                        mode: quizMode,
                                        category_id: category,
                                    }),
                                })
                                .then(response => {
                                    return response.json();
                                })
                                .then(data => {
                                    setQuizResultId(data.id);
                                });
                            });


                        }
                        
                        setIsStarted(true);
                    }}
                >
                    START
                </button>
            </>
        );
    }


    if (isFinished) {
        return (
            <div className="finish-screen">
                <h2>クイズ終了！</h2>

                <p className="finish-score">
                    {questions.length}問中 {correctCount}問正解！
                </p>

                <p className="finish-message">
                    お疲れさまでした！
                </p>

            <div className="finish-buttons">
                <button
                    className="retry-button"
                    onClick={async () => {

                        if (isComprehensiveTest) {
                            const response = await fetch(
                                "http://127.0.0.1:8000/api/comprehensive_test"
                            );

                            const data = await response.json();

                            setQuestions(data);

                            const xsrfToken = decodeURIComponent(
                                document.cookie
                                    .split('; ')
                                    .find(row => row.startsWith('XSRF-TOKEN='))
                                    ?.split('=')[1] || ''
                            );

                            const resultResponse = await fetch(
                                "http://localhost:8000/api/quiz-results",
                                {
                                    method: "POST",
                                    credentials: "include",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-XSRF-TOKEN": xsrfToken,
                                    },
                                    body: JSON.stringify({
                                        correct_count: 0,
                                        total_questions: data.length,
                                        mode: "comprehensive",
                                        category_id: null,
                                    }),
                                }
                            );
                            
                            const resultData = await resultResponse.json();

                            setQuizResultId(resultData.id);
                        }

                        setCurrentQuestionIndex(0);
                        setSelectedChoice(null);
                        setAnsweredChoice(null);
                        setIsAnswered(false);
                        setCorrectCount(0);
                        setIsFinished(false);
                    }}
                >
                    もう一度挑戦！
                </button>

                <button
                    className="back-to-quiz-button"
                    onClick={() => {
                        window.location.href = "/quiz";
                    }}
                >
                    クイズ選択に戻る
                </button>
            </div>
        </div>
        );
    }


    return (
        <>
            {currentQuestion && (
                <>
                <button
                    className="retire-button"
                    onClick={() => {
                        if (window.confirm("クイズを終了しますか？")) {
                            window.location.href = "/quiz";
                        }
                    }}
                >
                    リタイア
                </button>
                    <div>
        
                        <div className="question-box">
                            
                        <div className="question-info">
                            <p className="question-category">
                                カテゴリ:{categories[currentQuestion.category_id]}
                            </p>

                            <p className="question-number">
                                Q {currentQuestionIndex + 1} / {questions.length}
                            </p>
                        </div>

                            <div className="question-text">
                                {currentQuestion.question_text.trim().split(/\n\s*\n/).map((part, index) => (
                                    <p
                                        key={index}
                                        className={index === 0 ? "question-sentence" : "question-code"}
                                    >
                                        {part}
                                    </p>
                                ))}
                            </div>
                        </div>

                        <div className="choices-container">
                            {shuffledChoices.map(choice => (
                                <button
                                    className={`choice-button ${
                                        selectedChoice?.id === choice.id ? "selected" : ""
                                    }`}
                                    disabled={isAnswered}
                                    key={choice.id}
                                    onClick={() => {
                                        setSelectedChoice(choice);
                                    }}
                                >
                                    {choice.choice_text}
                                </button>
                            ))}

                        </div>

                    {!isAnswered && (    
                        <button
                            className="answer-button"
                            disabled={selectedChoice === null}
                            onClick={() => {
                                setAnsweredChoice(selectedChoice);
                                if (selectedChoice.is_correct === 1) {
                                    setCorrectCount(correctCount + 1);
                                }
                                const xsrfToken = decodeURIComponent(
                                    document.cookie
                                        .split('; ')
                                        .find(row => row.startsWith('XSRF-TOKEN='))
                                        ?.split('=')[1] || ''
                                );

                                fetch("http://localhost:8000/api/answer-histories", {
                                    method: "POST",
                                    credentials: "include",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-XSRF-TOKEN": xsrfToken,
                                    },
                                    body: JSON.stringify({
                                        quiz_result_id: quizResultId,
                                        question_id: currentQuestion.id,
                                        choice_id: selectedChoice.id,
                                        is_correct: selectedChoice.is_correct,
                                    }),
                                })
                                .then(response => {
                                    return response.text();
                                })
                                .then(data => {
                                });

                                setIsAnswered(true);
                            }}
                        >
                            解答する
                        </button>
                    )}

                                        {isAnswered && (
                        <button
                            className="next-button"
                            onClick={() => {
                                if (currentQuestionIndex === questions.length - 1) {
                                    const finalCorrectCount = correctCount;

                                    const xsrfToken = decodeURIComponent(
                                        document.cookie
                                            .split('; ')
                                            .find(row => row.startsWith('XSRF-TOKEN'))
                                            ?.split('=')[1] || ''
                                    )
                                    
                                    fetch(`http://localhost:8000/api/quiz-results/${quizResultId}`, {
                                        method: "PUT",
                                        credentials: "include",
                                        headers: {
                                            "Content-Type": "application/json",
                                            "X-XSRF-TOKEN": xsrfToken,
                                        },
                                        body: JSON.stringify({
                                            correct_count: finalCorrectCount,
                                        }),
                                    });

                                    setIsFinished(true);

                                } else {
                                    setCurrentQuestionIndex(currentQuestionIndex + 1);
                                    setSelectedChoice(null);
                                    setIsAnswered(false);
                                }
                            }}
                        >
                            次へ
                        </button>
                    )}

                    </div>
                </>
            )}

                         {selectedChoice && isAnswered && (
                            <>
                                <p className={answeredChoice?.is_correct === 1
                                    ? "answer-result correct"
                                    : "answer-result incorrect"
                                }>
                                    {answeredChoice?.is_correct === 1
                                        ? "正解！"
                                        : "不正解！"}
                                </p>

                                {answeredChoice?.is_correct !== 1 && (
                                    <p className="correct-answer">
                                        正解は「{correctChoice?.choice_text}」
                                    </p>
                                )}

                                <div className="explanation-box">
                                    <p>解説</p>
                                    <p>
                                        {currentQuestion?.explanation}
                                    </p>
                                </div>
                            </>
                        )}
        </>
    );
}


export default QuestionList;