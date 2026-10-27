            $db=new DB();

            $user = new User();
            $user->create([
                "name"=>"Juan",
                "email"=>"Jaume@pepe.com",
                "password"=>"pepe"
            ]);
