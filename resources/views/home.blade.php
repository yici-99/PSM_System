<!DOCTYPE html>
<html>


<style>
    div {
        text-align: center;
        vertical-align: middle;
        padding: 20px 30px 20px;
        width: 440px;
        margin: auto;
        margin-top:5%;
        
    }

    input,select {
        font-size: 13pt;
        width: 300px;
        height: 30px;
    }
    .form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border-radius:10px;
  max-width: 500px;
  margin: 30 auto 80px;
  padding: 38px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  
}

.texts {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 80%;
  border: 0;
  margin: 0 0 10px;
  padding: 20px;
  box-sizing: border-box;
  font-size: 14px;
}

.s1 {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 80%;
  font-size: 14px;
  border: 0;
  margin: 0 0 10px;
  box-sizing: border-box;
}



body {
  background-color: #328f8a;
  background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("ump view.jpg");
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.button{
  width:150px;
  border-radius:8px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid orange;
}

.button1:hover {
  background-color: orange;
  color: white;
}
</style>


<body>

<div class="form transparent">
    <img src="umplogo.png" alt="ump" width="250" height="150"><br><br>
    <form action = "/masterStu" method="post">
        @csrf
        <input type="text" required class="texts" name="email" placeholder="Email"><br><br>
        <input type="password" required class="texts" name="password" placeholder="Password"><br><br>
        <select required name = "role_type" class="s s1" >
            <option selected = "selected" value="Student"id ="detaa">Student</option>
            <option value="Supervisor" id ="detaa">Supervisor</option>
            <option value="Coordinator" id ="detaa">Coordinator</option>
        </select><br><br>
        <input type="submit" class="button button1" value="Login">
    </form>
</div>
</body>
</html>

