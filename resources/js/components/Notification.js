import React from "react";
import ReactDOM from "react-dom"

export default function Notification()
{
    return (<div>
        <p>Notification</p>
    </div>)
}

if (document.getElementById("notification"))
{
    ReactDOM.render(<Notification/>, document.getElementById("notification"))
}
