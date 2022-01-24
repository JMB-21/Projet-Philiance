@{
newPassword = Request["newPassword"];
confirmPassword = Request["confirmPassword"];
token = Request["token"];
if IsPost
{
    // input testing is ommitted here to save space
    retunValue = ResetPassword(token, newPassword);
}
}
<h1>Change Password</h1>

<form method="post" action="">

<label for="newPassword">New Password:</label>
<input type="password" id="newPassword" name="newPassword" title="New password" />

<label for="confirmPassword">Confirm Password:</label>
<input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" />

<label for="token">Pasword Token:</label>
<input type="text" id="token" name="token" title="Password Token" />

<p class="form-actions">
<input type="submit" value="Change Password" title="Change password" />
</p>

</form>
