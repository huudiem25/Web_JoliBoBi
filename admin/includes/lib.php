<?php
function dangnhap($user, $pass)
{
	global $o;
	$vSQL = "SELECT * FROM users 
			WHERE username='$user' 
				AND password='$pass' 
				AND active=1";
	$vResult = $o->query($vSQL)->fetchAll();

	if (count($vResult) > 0) {
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;

		$vSQL_Role = "SELECT RoleID FROM user_role WHERE UserID='$user'";
		$vResult_Role = $o->query($vSQL_Role)->fetchAll();
		foreach ($vResult_Role as $rowRole) {
			$roles[] = $rowRole["RoleID"];
		}

		$_SESSION['roles'] = $roles;

		return true;
	}

	return false;
}

function xacthuc($user, $pass)
{
	global $o;
	$vSQL = "SELECT * FROM users 
			WHERE username='$user' 
				AND password='$pass' 
				AND active=1";
	$vResult = $o->query($vSQL)->fetchAll();
	if (count($vResult) > 0) {
		return true;
	}

	return false;
}

function dangxuat()
{
	global $o;
	$_SESSION['user'] = '';
	$_SESSION['pass'] = '';

	header("Location: login.php");
}

function checkRole_Module($pModuleName)
{
	global $o;
	$userRoles = isset($_SESSION['roles']) ? $_SESSION['roles'] : '';

	$vSQL = "SELECT RoleID FROM menu_role as a 
		INNER JOIN menus as b ON b.ID = a.MenuID 
		WHERE b.ModuleName='$pModuleName' 
			AND b.Path='?mod=$pModuleName'";
	$vResult = $o->query($vSQL)->fetchAll();
	foreach ($vResult as  $menuRole) {
		for ($j = 0; $j < count($userRoles); $j++) {
			if ($menuRole["RoleID"] == $userRoles[$j]) {
				return true;
			}
		}
	}
	return false;
}

function checkRole_Menu($pMenuID)
{
	global $o;
	$userRoles = isset($_SESSION['roles']) ? $_SESSION['roles'] : '';

	$vSQL = "SELECT RoleID FROM menu_role WHERE MenuID=$pMenuID";
	$vResult = $o->query($vSQL)->fetchAll();

	foreach ($vResult as $menuRole) {
		if ($menuRole["RoleID"] == 4) { //Truong hop Guest
			return true;
		}
		if (is_array($userRoles)) {
			for ($i = 0; $i < count($userRoles); $i++) {
				if ($menuRole["RoleID"] == $userRoles[$i]) {
					return true;
				}
			}
		}
	}
	return false;
}

function create_menu($pParentID = 0)
{
	global $o;
	$vSQL = "SELECT * FROM menus 
		WHERE (ParentID=$pParentID) AND (IFNULL(Visible,0)=1) 
		ORDER BY Possition ASC";

	$vResult = $o->query($vSQL)->fetchAll();

	$vOutput = "";
	if (count($vResult) > 0) {
		$vOutput .= "<ul>\n";
		foreach ($vResult as $row) {
			//echo $vSQL;
			$MenuID = $row["ID"];
			$MenuName = $row["MenuName"];
			$MenuPath = $row["Path"];

			if (checkRole_Menu($MenuID) == true) {
				$vOutput .= "<li>\n";
				$vOutput .= "<a href=\"index.php$MenuPath\">$MenuName</a>\n";
				$vOutput .= create_menu($MenuID);
				$vOutput .= "</li>\n";
			}
		}
		$vOutput .= "</ul>\n";
	}

	return $vOutput;
}

function combobox_menu($pSelectedID = -1, $pParentID = 0, $pSpaceBlank = "")
{
	global $o;
	$vSQL = "SELECT * FROM menus 
		WHERE (ParentID=$pParentID) AND (IFNULL(Visible,0)=1) 
		ORDER BY Possition ASC";
	$vResult = $o->query($vSQL)->fetchAll();

	$vOutput = "";
	if (count($vResult) > 0) {
		foreach ($vResult as $row) {
			$MenuID = $row["ID"];
			$MenuName = $row["MenuName"];
			$MenuPath = $row["Path"];

			$vSelectedStyle = "";
			if ($pSelectedID == $MenuID) {
				$vSelectedStyle = 'selected="selected"';
			}

			$pSpaceBlank = "";
			if ($pParentID != 0) {
				$pSpaceBlank = "&nbsp;&nbsp;&nbsp;";
			}

			$vOutput .= "<option value=\"$MenuID\" $vSelectedStyle>$pSpaceBlank $MenuName</option>\n";
			$vOutput .= combobox_menu($pSelectedID, $MenuID, $pSpaceBlank);
		}
	}

	return $vOutput;
}




?>

<?php
function checkRole_Module_Left($pModuleName)
{
	global $o;
	$userRoles = isset($_SESSION['roles']) ? $_SESSION['roles'] : '';

	$vSQL = "SELECT RoleID FROM menu_role as a 
		INNER JOIN menus_left as b ON b.ID = a.MenuID 
		WHERE b.ModuleName_Left='$pModuleName' 
			AND b.Path_Left='?mod=$pModuleName'";
	$vResult = $o->query($vSQL)->fetchAll();
	foreach ($vResult as $menuRole) {
		for ($j = 0; $j < count($userRoles); $j++) {
			if ($menuRole["RoleID"] == $userRoles[$j]) {
				return true;
			}
		}
	}
	return false;
}

function checkRole_Menu_Left($pMenuID)
{
	global $o;
	$userRoles = isset($_SESSION['roles']) ? $_SESSION['roles'] : '';

	$vSQL = "SELECT RoleID FROM menu_role WHERE MenuID=$pMenuID";
	$vResult = $o->query($vSQL);

	foreach ($vResult as $menuRole) {
		if ($menuRole["RoleID"] == 1) { //Truong hop Guest
			return true;
		}
		if (is_array($userRoles)) {
			for ($i = 0; $i < count($userRoles); $i++) {
				if ($menuRole["RoleID"] == $userRoles[$i]) {
					return true;
				}
			}
		}
	}
	return false;
}

function create_menu_Left($pParentID = 0)
{
	global $o;
	$vSQL = "SELECT * FROM menus_left 
		WHERE (ParentID_Left=$pParentID) AND (IFNULL(Visible_Left,0)=1) 
		ORDER BY Possition_Left ASC";

	$vResult = $o->query($vSQL)->fetchAll();

	$vOutput = "";
	if (count($vResult) > 0) {
		$vOutput .= "<ul>\n";
		foreach ($vResult as $row) {
			//echo $vSQL;
			$MenuID = $row["ID"];
			$MenuName = $row["MenuName_Left"];
			$MenuPath = $row["Path_Left"];

			if (checkRole_Menu_Left($MenuID) == true) {
				$vOutput .= "<li>\n";
				$vOutput .= "<a href=\"index.php$MenuPath\">$MenuName</a>\n";
				$vOutput .= create_menu_Left($MenuID);
				$vOutput .= "</li>\n";
			}
		}
		$vOutput .= "</ul>\n";
	}

	return $vOutput;
}


?>