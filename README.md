Example usage of the EtcPasswdOauthBundle
=========================================

Installation:

    cd /var/www
    git clone http://github.com/mazen/EtcpasswdOauthExample
    cd EtcpasswdOAuthExample
    git submodule update --init
    app/console assets:install web

create a file app/config/parameters.ini and add the following elements after creating 
api keys with those providers.
    
    [parameters]
        locale = en
        secret = Foo

        github.client_id = "xxx"
        github.secret    = "xxx"

        google.client_id = "xxx"
        google.secret    = "xxx"

        facebook.client_id = "xxx"
        facebook.secret    = "xxx"


Open your browser and log in ;)
