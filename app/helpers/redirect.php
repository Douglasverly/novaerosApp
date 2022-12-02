<?php
function redirect($to){
	return header('Location:'.$to);
}
function setMessageAndRedirect($index,$message,$to){
        setFlash($index,$message);
        return redirect($to);
}