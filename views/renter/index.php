{{ include('layouts/header.php', {title:'Renters'})}}
    <h1>Renter</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Zip Code</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
        {% for renter in renters %}
            <tr>
                <td><a href="{{base}}/renter/show?id={{renter.id}}">{{renter.name}}</a></td>
                <td>{{renter.address}}</td>
                <td>{{renter.city}}</td>
                <td>{{renter.zipcode}}</td>
                <td>{{renter.locationtypeid}}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <a href="{{base}}/renter/create" class="btn">New Renter</a>
{{ include('layouts/footer.php')}}