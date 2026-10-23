<h1>LOGIN</h1>

<form method="post" action="/createUser">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name"></input>
    <label for="email">Email: </label>
    <input type="text" id="email" name="email"></input>
    <label for="password">password: </label>
    <input type="text" id="password" name="password"></input>
    <input type="submit" value="Create User">
</form>

<style>
form{
    display: flex;
    flex-direction: column;
    width: 20vh;
}
</style>
