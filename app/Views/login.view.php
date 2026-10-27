<h1>LOGIN</h1>

<form method="post" action="/login">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name"></input>
    <label for="password">password: </label>
    <input type="password" id="password" name="password"></input>
    <input type="submit" value="LOGIN">
</form>

<style>
form{
    display: flex;
    flex-direction: column;
    width: 20vh;
}
</style>
