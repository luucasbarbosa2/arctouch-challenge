class Config {
    constructor() {
        this.config = Cookies.get('config');
        
    }

    
    get status(){
        return this.config
    }

}

