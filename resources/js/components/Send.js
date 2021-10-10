import React from "react";
import ReactDOM from "react-dom"
import {useState, useEffect, useRef} from "react"

function Send(props)
{
    const [remaningBalance, setRemainingBalance] = useState(parseFloat(props.value))
    const [sendMoney, setSendMoney] = useState(0);
    const amount = useRef()
    useEffect(() => {
        if (sendMoney === ''){
            setRemainingBalance(parseInt(props.value))
            return
        }
        let amt = parseInt(sendMoney)
        if (amt !== NaN){
            if (amt > remaningBalance){
                amount.current.value = parseInt(props.value)
                setRemainingBalance(0)
                return
            }
            setRemainingBalance(remaningBalance - amt)
        }
        else{
            setRemainingBalance(parseInt(props.value))
        }
    }, [sendMoney])
    return <div className="card">
        <div className="card-header">
            Send Money
        </div>
        <div className="card-body">

            <div className="input-group input-group-default mb-3">
                <div className="input-group-prepend">
    <span className="input-group-text" id="inputGroup-sizing-default">Available Balance</span>
  </div>
            <input readOnly value={remaningBalance} className="input" className="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"/>

            </div>
             <div className="input-group input-group-default mb-3">
                <div className="input-group-prepend">
    <span className="input-group-text" id="inputGroup-sizing-default">Send To</span>
  </div>
            <input type="email" className="input" className="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"/>

            </div>
             <div className="input-group input-group-default mb-3">
                <div className="input-group-prepend">
    <span className="input-group-text" id="inputGroup-sizing-default">Send Money</span>
  </div>
            <input ref={amount} type="number" className="input" className="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" onChange={() => setSendMoney(amount.current.value)}/>

            </div>
            <button className="btn btn-primary">Send</button>
        </div>
    </div>
}
export default Send;

if (document.getElementById("send"))
{
    ReactDOM.render(<Send value={document.getElementById("send").attributes["amt"].nodeValue}/>, document.getElementById("send"))
}
