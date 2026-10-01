import logo from './ProQuiz-logo.png'
import './Home.css'
import { Link } from 'react-router-dom'
import { useEffect, useState } from 'react'

function Home() {
    const [isSpinning, setIsSpinning] = useState(false)
 
    useEffect(() => {
        const keys = []

        const konamiCode = [
            'ArrowUp',
            'ArrowUp',
            'ArrowDown',
            'ArrowDown',
            'ArrowLeft',
            'ArrowRight',
            'ArrowLeft',
            'ArrowRight',
            'b',
            'a'
        ]

        const handleKeyDown = (event) => {
            console.log('Home key:', event.key)
            keys.push(event.key)
            keys.splice(0, keys.length - 10)
            if(keys.length === 10 && keys.join() === konamiCode.join()) {
                console.log('コナミコマンド成功！')
                setIsSpinning(true)

                setTimeout(() => {
                    setIsSpinning(false)
                }, 1000)
            }
        }

        window.addEventListener('keydown', handleKeyDown)

        return () => {
            window.removeEventListener('keydown', handleKeyDown)
        }

        }, [])

    return (
        <div className="home-page">
            <img 
                className={`proquiz-logo ${isSpinning ? 'spinning' : ''}`} 
                src={logo} 
                alt="ProQuiz" 
            />
            <Link to="/quiz">👾 QUIZ START 👾</Link>
            <Link to="/register">👾 REGISTER 👾</Link>
            <Link to="/login">👾 LOGIN 👾</Link>
        </div>
    );
}

export default Home;