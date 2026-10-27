<h1>CREATE A USER</h1>

<form method="post" action="/createUser">
    <label for="name">Name: </label>
    <input type="text" id="name" name="name"></input>
    <label for="email">Email: </label>
    <input type="text" id="email" name="email"></input>
    <label for="password">password: </label>
    <input type="password" id="password" name="password"></input>
    <input type="submit" value="CREATE">
</form>

<style>
form{
    display: flex;
    flex-direction: column;
    width: 20vh;
}
</style>
