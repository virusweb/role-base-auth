Steps For Configuration
-------------------------------
1. git clone https://github.com/virusweb/role-base-auth.git or download repository
2. cd  role-base-auth
3. run command composer update
4. run command npm i
5. run command npm run dev
6. copy .env.example file content and create a new file .env and paste into it (change db config as per urs)
7. run command php artisan:migrate --seed
