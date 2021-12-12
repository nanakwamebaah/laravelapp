<template>
<section class="bod">
  <div class="loginbox">
  <!--<img src="../images/logo.png" class ="avatar">-->
    <h1>Login Here</h1>
    <form>
      <p> Username </p>
      <input type="text" name="" placeholder="Enter Username" >
      <p> Password </p>
      <input type="password" name="" placeholder="Enter Password"><br>
      <input type="submit" name="" value="Login"><br>
      <a href="#">Lost your password?</a><br>
      <a href="#">Don't have an account?</a>
    </form>
    
  </div>
  </section>
</template>


<style>
.bod{
    background-color:rgb(226, 233, 240);
    padding: 0;
    margin: 0;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.loginbox{
  width:450px;
  height: 420px;
  background:#fff;
  color:#fff;
  top:50%;
  left:50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}
.avatar{
  width:120px;
  height:50px;
  border-radius:10px;
  position: absolute;
  top:0px;
  left:calc(50% - 50px);
  background:#1876f2;
}
h1{
  margin: 0;
  padding: 0 0 20px;
  text-align: center;
  font-size: 22px;
  color:#1876f2;
}
.loginbox p{
  margin: 0;
  padding: 0;
  font-weight: bold;
  text-align: left;
  color:#1876f2;
}
.loginbox input{
  width: 100%;
  margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]{
  border:none;
  border-bottom: 1px solid #1876f2;
  background:transparent;
  outline:none;
  height:40px;
  color:#000;
  font-size:16px;
}
.loginbox input[type="submit"]{
  border:none;
  outline:none;
  height:40px;
  background: #1876f2;
  color:#fff;
  font-size:18px;
  border-radius:20px;
}
.loginbox input[type="submit"]:hover{
  cursor: pointer;
  background:#1876f2;
  color:#000;
}
.loginbox a{
  text-decoration: none;
  font-size: 12px;
  line-height: 20px;
  color:#1876f2;
  text-align: left;
}
</style>

<script>
// @ is an alias to /src

//object
export default {
  name: 'Login',
 
}
</script>