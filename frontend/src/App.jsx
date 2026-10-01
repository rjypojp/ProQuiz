import './App.css'
import { useState, useEffect } from 'react'
import { BrowserRouter, Routes, Route, Link } from 'react-router-dom'
import QuestionList from './QuestionList'
import Register from './Register'
import Login from './Login'
import MyPage from './MyPage'
import Home from './Home'

function App() {
  const [user, setUser] = useState(null)

  useEffect(() => {
    const checkLogin = async () => {
      const response = await fetch('http://localhost:8000/api/user', {
        credentials: 'include',
      })

      if (response.ok) {
        const userData = await response.json()
        setUser(userData)
      }
    }

    checkLogin()
  }, [])

  return (
    <BrowserRouter>
      
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/quiz" element={<QuestionList user={user} setUser={setUser} />} />
        <Route path="/register" element={<Register />} />
        <Route path="/login" element={<Login user={user} setUser={setUser} />} />
        <Route path="/mypage" element={<MyPage user={user} setUser={setUser} />} />
      </Routes>

    </BrowserRouter>
  )
}

export default App