import React from 'react';
import './Dashboard.css';
import { FaWallet, FaUser, FaBell } from 'react-icons/fa';
import { Button } from '../../Button';

function Dashboard() {
    return (
        <>
            <div className="wallet-container text-center">
                <p className="page-title"><FaWallet className="fa fa-align-left" /> Plutus Wallet</p>

                <div className="amount-box text-center">
                    <img src="images/svg-5.svg"></img>
                    <p>Total Balance</p>
                    <p className="amount">$500</p>
                </div>
                <div className="btn-group text-center">
                    <Button className="btn" buttonStyle='btn--outline' buttonColor="blue">Send Money</Button>
                </div>
                <div className="txn-history">
                    <p><strong>Transactions</strong></p>
                    <div className="txn-item">
                    <p className="txn-list">Sent to Username: apurba<span className="debit-amount">-$100</span></p>
                    </div>
                    <div className="txn-item">
                    <p className="txn-list">Sent to Username: ashutosh<span className="debit-amount">-$10.31</span></p>
                    </div>
                    <div className="txn-item">
                    <p className="txn-list">Received from Username: apurba<span className="credit-amount">+$103.6</span></p>
                    </div>
                    <div className="txn-item">
                    <p className="txn-list">Paid to Amir Technologies Inc. Remarks: Bill Payment<span className="debit-amount">-$341.06</span></p>
                    </div>
                    <div className="txn-item">
                    <p className="txn-list">Sent to Username: apurba<span className="debit-amount">$100</span></p>
                    </div>

                    <Button className="btn" buttonColor='blue'>View All History</Button>

                </div>
            </div>
        </>
    )
}

export default Dashboard;
