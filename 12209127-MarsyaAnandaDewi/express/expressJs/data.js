const carData = [
    { car: 'Toyota', model: 'Camry', year: 2022 },
    { car: 'Honda', model: 'Civic', year: 2023 },
    { car: 'Ford', model: 'Mustang', year: 2022 },
    { car: 'Chevrolet', model: 'Silverado', year: 2023 },
    { car: 'BMW', model: 'X5', year: 2022 },
    { car: 'Mercedes-Benz', model: 'E-Class', year: 2023 },
    { car: 'Audi', model: 'Q5', year: 2022 },
];

module.exports = carData;

const carData = require('./data');

const sortCarsByYearAndAlphabet = async () => {
    await new Promise((resolve) => setTimeout(resolve, 5000));

    const sortedCars = carData
        .filter(car => car.year === 2022)
        .sort((a, b) => a.car.localeCompare(b.car));

    return JSON.stringify(sortedCars);
};

sortCarsByYearAndAlphabet()
    .then(result => {
        console.log(result);
    })
    .catch(error => {
        console.error(error);
    });
