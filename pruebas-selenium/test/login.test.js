const { Builder, By, Key, until } = require('selenium-webdriver');
const { expect } = require('chai');
const fs = require('fs'); // Necesario para guardar las capturas
require('chromedriver');

// Ajusta las pruebas a tu puerto
const RUTA_PROYECTO = 'http://localhost:8012/proyectos-php/test-crud-php';

describe('Pruebas de Sistema: Login', function() {
    this.timeout(30000); 
    let driver;


    beforeEach(async function() {
        driver = await new Builder().forBrowser('chrome').build();
    });


    afterEach(async function() {
        if (driver) {
            await driver.quit();
        }
    });


    async function tomarCaptura(nombreArchivo) {
        let image = await driver.takeScreenshot();
        fs.writeFileSync(`reportes/${nombreArchivo}.png`, image, 'base64');
    }

    it('TC-01: Login Exitoso (Camino Feliz)', async function() {
        await driver.get(`${RUTA_PROYECTO}/login.php`);


        await driver.findElement(By.name('usuario')).sendKeys('SeleniumUser');
        await driver.findElement(By.name('password')).sendKeys('test1234'); 
        

        await driver.findElement(By.name('btningresar')).click();


        await driver.wait(until.titleIs('Libros'), 5000);
        

        await tomarCaptura('login_exitoso');


        let titulo = await driver.getTitle();
        expect(titulo).to.equal('Libros');
    });

    it('TC-02: Login Fallido (Contraseña Incorrecta)', async function() {
        await driver.get(`${RUTA_PROYECTO}/login.php`);


        await driver.findElement(By.name('usuario')).sendKeys('Lmontoya');
        await driver.findElement(By.name('password')).sendKeys('clave_erronea');
        
        await driver.findElement(By.name('btningresar')).click();


        let alerta = await driver.wait(until.elementLocated(By.className('alert-danger')), 5000);
        let textoAlerta = await alerta.getText();


        await tomarCaptura('login_fallido');


        expect(textoAlerta).to.include('Contraseña incorrecta');
    });
});