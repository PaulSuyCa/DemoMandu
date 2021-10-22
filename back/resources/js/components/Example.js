import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
            <div className="container">
                    <h3>Mandu</h3>
                <hr/>
                <table class="table table-bordered order-table ">
                <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Division Superior</th>
                    <th>Colaboradores</th>
                    <th>Niveles</th>
                    <th>Subdivisiones</th>
                    <th>Embajadores</th>
                    </tr>
                </thead>
                <tbody id="bodytable">
                    <tr>
                        <td>Nombre</td>
                        <td>Division Superior</td>
                        <td>Colaboradores</td>
                        <td>Niveles</td>
                        <td>Subdivisiones</td>
                        <td>Embajadores</td>
                    </tr>
                </tbody>
                </table>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
