{{ include('layouts/header.php', {title:'Logs'}) }}
    <h1>Logs</h1>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>IP Address</th>
                <th>Page</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            {% for log in logs %}
            <tr>
                <td>{{ log.username }}</td>
                <td>{{ log.ip_address }}</td>
                <td>{{ log.page }}</td>
                <td>{{ log.visit }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

{{ include('layouts/footer.php') }}