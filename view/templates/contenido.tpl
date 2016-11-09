<form action="index.php" id="frm" method="get">
    <center>
        <h2>Login</h2>
        {$msg}
        <div id="error"></div>
        <table>
            <tr>
                <td>Usuario</td>
                <td><input type="text" name="usu" id="usu" required></td>                
            <tr>  
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" id="pass" required></td>                
            <tr>
            <tr>
                <td>
                    <input type="button" onclick="Validar();" value="Entrar">
                </td>
                <td>
                    <input type="button" onclick="Registrar();" value="Registrar">
                </td>        
            <tr>                  
        </table> 
   </center>
</form>

