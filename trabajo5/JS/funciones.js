//funciones de javascript//

const iva = 1.21;
const iva_general = 1.43;

const item1 = { //objeto del item1//
    precio: '1900',
    cantidad: '35',
    inpuesto: iva,
    calculartotal: function() {
        return item1.precio * item1.cantidad * item1.inpuesto
    }
}


const item2 = { //objeto del item2//
    precio: '2500',
    cantidad: '8',
    inpuesto: iva_general,
    calculartotal: function() {
        return item2.precio * item2.cantidad * item2.inpuesto
    }
}

const factura = {
    item1,
    item2,
    calculartotal: function() {
        return item1.calculartotal() + item2.calculartotal()
    }
}

console.log(factura.calculartotal())