import React from "react"
import {
    BrowserRouter,
    Switch,
    Route,
    Link
} from "react-router-dom";
import TaskPage from "./pages/tasks"
import LoginPage from "./pages/login"
import HelpPage from "./pages/help";

const Router = () => {
    return (
        <BrowserRouter>
            <div>
                <header className="global-head">
                    <ul>
                        <li><Link to="/">ホーム</Link></li>
                        <li><Link to="/about">ヘルプ</Link></li>
                        <li><Link to="/users">ログイン</Link></li>
                        <li><Link to="/users">ログアウト</Link></li>
                    </ul>
                </header>
                <Switch>
                    <Route path="/about">
                        <HelpPage />
                    </Route>
                    <Route path="/users">
                        <LoginPage />
                    </Route>
                    <Route path="/">
                        <TaskPage />
                    </Route>
                </Switch>
            </div>
        </BrowserRouter>
    )
}

export default Router