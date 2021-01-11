<?php

    function getStartupsData()
    {
        return json_decode(file_get_contents(__DIR__.'/assets/data/startups_data.json'));
    }

    function getStartup($id){
        $startups=getStartupsData();
        return $startups[$id-1];
    }

    function getUsersInfo(){
        return json_decode(file_get_contents(__DIR__.'/assets/data/user.json'));
    }

    function getUsersInfoArray(){
        return json_decode(file_get_contents(__DIR__.'/assets/data/user.json'),true);
    }

    function searchstartup($startup_name){
        $startups = getStartupsData();
        foreach($startups as $startup){
            if($startup->name===$startup_name){
                return $startup->id-1;
            }
        };
        return -1;
    }
    
    function ifUserRegistered($email){
        $startups = getStartupsData();
        foreach($startups as $startup){
            if($startup->useremail===$email){
                return true;
            }
        }
        return false;
    }
    
    function ifUserExist($username){
        
        $users = getUsersInfo();
        foreach($users as $user){
            if($user->name === $username){
                return true;
            }
        }
        return false;
    }

    function ifUserExistEmail($email){
        
        $users = getUsersInfo();
        foreach($users as $user){
            if($user->email === $email){
                return true;
            }
        }
        return false;
    }


    function checkpassword($password, $username){
        $users = getUsersInfo();
        foreach($users as $user){
            if($user->name === $username && $user->password === $password){
                return true;
            }
        }
        return false;
    }

    function checkemail($email, $username){
        $users = getUsersInfo();
        foreach($users as $user){
            if($user->name === $username && $user->email === $email){
                return true;
            }
        }
        return false;
    }


    function addUser($name, $email, $password){
        $array_data = getUsersInfoArray();
        $extra = array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
        if(file_put_contents('./assets/data/user.json', $final_data)){
            $message = '<h1>User added</h1>';
        };
    
    }

    function registerUser($data){
        //print_r($data['startup_name']);
        
        $array_data = getStartupsData();


                $id = count($array_data)+1;

                $founder1 = array(
                    "name" => $data['founder1'],
                    "text" => "founder"
                );
                $founder2 = array(
                    "name" => $data['founder2'],
                    "text" => "cofounder"
                );
                $members = array();
                array_push($members,$founder1,$founder2);


                $phone1 = array(
                    "text" => $data['phone'],
                );
                $phone = array();
                array_push($phone,$phone1);

                $email1 = array(
                    "text" => $data['email'],
                );
                $email = array();
                array_push($email,$email1);

                $LinkedIn1 = array(
                    "text" => $data['LinkedIn'],
                );
                $LinkedIn = array();
                array_push($LinkedIn,$LinkedIn1);



                $extra = array(
                    "id" => $id,
                    "username" => $data['username'],
                    "useremail" => $data['useremail'],
                    "name" => $data['startup_name'],
                    "details" => $data['details'],
                    "description" => $data['description'],
                    "location" => $data['location'],
                    "focusIndustry" => $data['focusIndustry'],
                    "focusSector" => $data['focusSector'],
                    "serviceArea" => $data['serviceArea'],
                    "stage" => $data['stage'],
                    "noActiveYears" => $data['noActiveYears'],
                    "ratings" => $data['ratings'],
                    "website" => $data['website'],
                    "imgid" => $data['logo'],
                    "reviews" => [],
                    "members" => $members,
                    "contact" => [
                        "phone" => $phone,
                        "email" => $email,
                        "LinkedIn" => $LinkedIn,
                    ],
                );
                //print_r($array_data);
                //print_r($extra);

                
                $array_data[] = $extra;
                $final_data = json_encode($array_data,JSON_PRETTY_PRINT);
                if(file_put_contents('./assets/data/startups_data.json', $final_data)){
                    $message = '<h1>User added</h1>';
                };
    }



    function getfeedback(){
        return json_decode(file_get_contents(__DIR__.'/assets/data/feedback.json'));
    }


    function addfeedback($data,$imgupload,$FILES){
        //print_r($FILES);
        if($imgupload===1 && isset($FILES['file']) && $FILES['file']['name']!=""){
            $file = $FILES['file'];

            $fileName = $FILES['file']['name'];
            $fileTmpName = $FILES['file']['tmp_name'];
            $fileSize = $FILES['file']['size'];
            $fileError = $FILES['file']['error'];
            $fileType = $FILES['file']['type'];

            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('jpg','jpeg','png');
            if(in_array($fileActualExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 1000000){
                        $fileNameNew = $data['name'].".".$fileActualExt;
                        $fileDestination = "assets/images/feedbackUsers/".$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                    }else{
                        echo "<script>alert('File size is too big!');</script>";        
                        return;
                    }

                }else{
                    echo "<script>alert('There was an error uploading your file! Please try again');</script>";    
                    return;
                }

            }else{
                echo "<script>alert('you can not upload file of this type!');</script>";
                return;
            }
        }else{
            $fileNameNew = 'img.jpg';
        }
        

        $array_data = getfeedback($data);
        $extra = array(
            "name"=> $data['name'],
            "email" => $data['email'], 
            "feedback" => $data['feedback'],
            "image" => $fileNameNew
        );
        $array_data[] = $extra;
        $final_data = json_encode($array_data,JSON_PRETTY_PRINT);
        if(file_put_contents('./assets/data/feedback.json', $final_data)){
        };
    }
?>