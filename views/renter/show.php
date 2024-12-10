{{ include('layouts/header.php', {title:'Renter Show'})}}
    <div class="container">
        <h1>Renter</h1>
        <p><strong>Name : </strong>{{ renter.name }}</p>
        <p><strong>Address : </strong>{{ renter.address }}</p>
        <p><strong>City : </strong>{{ renter.city }}</p>
        <p><strong>Zip Code : </strong>{{ renter.zipcode }}</p>
        <a href="{{base}}/renter/edit?id={{ renter.id }}" class="btn">Edit</a>
        <form action="{{base}}/renter/delete" method="post">
        <input type="hidden" name="id" value="{{ renter.id }}">
            <button type="submit" class="btn red">Delete</button>
        </form>
    </div>
{{ include('layouts/footer.php')}}