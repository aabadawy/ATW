# A Question and comments system
**Here Some steps are required when installing the project and set up your database enviroment**
## Before starting to make sure database info is ok with the .env file.
### Now we will create the system Roles and Permissions
``` php artisan db:seed --class=PermmissionsRolesSeeder ```
### Then create the examples users in our system
``` php artisan db:seed --class=MainUsersSeeder ```
###### after seed these two classes, We now have 
- roles
1. admin
2. regular
- permissions
1. edit question
2. create question
3. delete question
4. edit comment
5. create comment
6. delete comment
- users
1. email: ahmedbadawy@atw.com , password: password (the Admin)
2. email: fares@atw.com , password: password (Regular user)
3. email: arafa@atw.com , password: password (Regular user)
### And these users which you will be able to login with them to test the App are

