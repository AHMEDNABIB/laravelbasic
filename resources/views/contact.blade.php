<h1>hello contact page</h1>

<form action="{{ route('student.store')}}">
    @csrf
    <input type="text" name="name" id="">
    <input type="email" name="email" id="">
    <button type="submit">submit</button>
</form>