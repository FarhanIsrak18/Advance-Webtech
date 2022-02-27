<html>
    <form action='{{route("logincheck")}}' method='post'>
        {{@csrf_field()}}
        <input type='text' name='phone' placeholder='enter phone'>
        <input type='submit' name='submit' value='login'>
    </form>
</html>