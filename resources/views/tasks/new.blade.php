<form action="/api/User" method="post">
    {{csrf_field()}}
    {{method_field('Get')}}
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="submit" value="Ok">
</form>