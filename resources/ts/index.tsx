import React from 'react'
import ReactDom from 'react-dom'

const App = () => {
    const title: string = 'TypeScript React !!'
    return (
        <h1>{ title }</h1>
    )
}

ReactDom.render(
    <App />,
    document.getElementById('app')
)