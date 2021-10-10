import React from 'react';
import ReactDOM from "react-dom"
import './Dashboard.css';
import { FaWallet, FaUser, FaBell } from 'react-icons/fa';
import { Button } from '../../Button';

function getNotification(){
    let obj  = document.getElementById("notifications").value
    return JSON.parse(obj)
}

function Dashboard() {
    const goto = (url) => {
        window.location = url
    }
    let notifications = getNotification()
    const datas = []
    const balance = document.getElementById("user_balance").value
    notifications.forEach((data, i) => {
        datas.push({
            index : i,
            classname : data.data.className,
            amount : data.data.amount,
            symbol : data.data.symbol,
            message : data.data.message
        })
        if (i == 4)
        {
            return
        }
    })

    return (
        <>
            <div className="wallet-container text-center">
                <p className="page-title"><FaWallet className="fa fa-align-left" /> Plutus Wallet</p>

                <div className="amount-box text-center">
                    <img src="/images/svg-5.svg"></img>
                    <p>Total Balance</p>
                    <p className="amount">${balance}</p>
                </div>
                <div className="btn-group text-center">
                    <Button className="btn" buttonStyle='btn--outline' buttonColor="blue" onClick={() => goto("/send")}>Send Money</Button>
                </div>
                <div className="txn-history">
                    <p><strong>Transactions</strong></p>
                        {
                            datas.map((data, index) => {
                                return <div className="txn-item" key={index}>
                                <p className="txn-list">{ data.message }<span className={data.classname}>{data.symbol} ${data.amount}</span></p>
                            </div>
                            })
}

                    <br/>
                    <Button className="btn" buttonColor='blue' onClick={() => goto("/transactions")} >View All History</Button>
                    <br/>
                </div>
            </div>
        </>
    )
}

export default Dashboard;

if (document.getElementById("dashboard-react"))
{
    ReactDOM.render(<Dashboard/>, document.getElementById("dashboard-react"))
}
