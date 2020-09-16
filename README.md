# laravelDemo


#透過composer安裝laravel Installer		
    composer global require laravel/installer	

安裝後，路徑應該會在 $HOME/.composer/vendor/bin

#建立新專案		
laravel new 新專案名稱	
或是 composer create-project laravel/laravel=5.5.* --prefer-dist（可指定版本）


#下載laradock測試環境用服務		
cd 新專案名稱 git clone https://github.com/Laradock/laradock.git

cd laradock/
cp env-example .env
docker-compose up -d nginx mysql workspace

#回專案目錄		
cd ..	
#複製範例設定檔		
cp .env.example .env	
#補齊 Laravel 的 secret key		
php artisan key:generate	
#測試開啟是否有welcome			
#在web.php加入一行Hello word		
Route::get('hello_word', function(){
    return 'Hello Word'
});	
