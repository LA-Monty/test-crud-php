const { Builder, By, Key, until } = require('selenium-webdriver');
const { expect } = require('chai');
const fs = require('fs'); 
require('chromedriver');

// Ajusta las pruebas a tu puerto
const RUTA_BASE = 'http://localhost:8012/proyectos-php/test-crud-php';

describe('Pruebas de CRUD: Modificar Libro', function() {
    this.timeout(30000); // timeout por se la prueba se come la pc
    let driver;

    
    before(async function() {
        driver = await new Builder().forBrowser('chrome').build();
        

        await driver.get(`${RUTA_BASE}/login.php`);
        await driver.findElement(By.name('usuario')).sendKeys('SeleniumUser'); 
        await driver.findElement(By.name('password')).sendKeys('test1234');
        await driver.findElement(By.name('btningresar')).click();
        

        await driver.wait(until.titleIs('Libros'), 10000);
    });


    after(async function() {
        if (driver) {
            await driver.quit();
        }
    });


    async function tomarCaptura(nombreArchivo) {
        let image = await driver.takeScreenshot();

        fs.writeFileSync(`reportes/${nombreArchivo}.png`, image, 'base64');
    }

    it('TC-03: Modificar Precio y Fecha de un Libro Existente', async function() {

        let botonEditar = await driver.findElement(By.css('.btn-warning'));
        await botonEditar.click();


        await driver.wait(until.elementLocated(By.name('titulo')), 5000);


        await tomarCaptura('crud_formulario_carga');

        let inputPrecio = await driver.findElement(By.name('precio'));
        await inputPrecio.clear(); 
        await inputPrecio.sendKeys('4550'); 

        let inputFecha = await driver.findElement(By.name('fecha_pub'));
        await inputFecha.sendKeys('02-12-2025'); // DD-MM-YYYY


        await driver.findElement(By.name('btnregistrar')).click();


        await driver.wait(until.titleIs('Libros'), 5000);


        await tomarCaptura('crud_modificacion_exitosa');


        let titulo = await driver.getTitle();
        expect(titulo).to.equal('Libros');
    });
});