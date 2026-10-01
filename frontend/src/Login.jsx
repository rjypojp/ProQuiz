import { useState } from 'react'
import { Link } from 'react-router-dom'
import './Login.css'

function Login({ user, setUser }) {
  const [name, setName] = useState('')
  const [password, setPassword] = useState('')
  const [loginError, setLoginError] = useState('')

 
  const handleLogin = async () => {
    setLoginError('')

    await fetch('http://localhost:8000/sanctum/csrf-cookie', {
      credentials: 'include',
    })

    const xsrfToken = decodeURIComponent(
        document.cookie
          .split('; ')
          .find(row => row.startsWith('XSRF-TOKEN='))
          ?.split('=')[1] || ''
    )

    const response = await fetch('http://localhost:8000/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
        'X-XSRF-TOKEN': xsrfToken,
      },
      credentials: 'include',
      body: JSON.stringify({
        name: name,
        password: password,
      }),
    })

    console.log(response.status)

    if (!response.ok) {
      setLoginError('ユーザー名またはパスワードが違います。')
      console.log('ログイン失敗')
      return
    }

    const userResponse = await fetch('http://localhost:8000/api/user', {
        credentials: 'include',
    })

    const userData = await userResponse.json()

    setUser(userData)
    console.log(userData)
}
  const handleLogout = async () => {
    
    const xsrfToken = decodeURIComponent(
        document.cookie
        .split('; ')
        .find(row => row.startsWith('XSRF-TOKEN='))
        ?.split('=')[1] || ''
    )

    const response = await fetch('http://localhost:8000/logout', {
      method: 'POST',
      headers: {
        'X-XSRF-TOKEN': xsrfToken,
      },
      credentials: 'include',
      redirect: 'manual',
    })

    setUser(null)

  }

  return (
    <div className="login-page">

      <div className="quiz-navigation">
        <Link to="/">トップページ</Link>
        <Link to="/quiz">クイズ</Link>
        
        {!user && (
            <Link to="/register">新規登録</Link>
        )} 
      </div>


      <h2 className="login-title">ログイン</h2>

      {user && (
        <div className="logged-in">
          <p>ログイン中:{user.name}</p>
          <button onClick={handleLogout}>ログアウト</button>
        </div>
      )}
      
      {loginError && (
        <p className="login-error">
            ユーザー名またはパスワードが違います。
        </p>
      )}

      {!user && (
        <div className="login-form">
          <input
            type="text"
            placeholder="ユーザー名"
            value={name}
            onChange={(e) => setName(e.target.value)}
            onKeyDown={(e) => console.log('Login key:', e.key)}
          />
          
          <input
             type="password"
             placeholder="パスワード"
             value={password}
             onChange={(e) => setPassword(e.target.value)}
          />
          
          <button onClick={handleLogin}>ログイン</button>

        </div>
      )}

    
    </div>
  )
}

export default Login