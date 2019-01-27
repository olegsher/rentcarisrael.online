function car1() {
}

const car = (cat, sipp, x, seats, type, p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19) => ({cat, sipp, x, seats, type, p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14,p15,p16,p17,p18,p19})

const cars = [
    car('B','MBMR',10,4, 'Suzuki Alto Man.',10,22,10,22,63,147,9,21,610,790,10,5,12,0.45,10,100,5,60,475),
    car('Q','EBAR',15,4, 'Fiat 500  (2 Doors)',10,22,10,22,63,147,9,21,610,790,10,5,12,0.45,10,100,5,60,475)
]

var app = new Vue({
    el: '#app',
    data: {
        cars: cars
    }
})