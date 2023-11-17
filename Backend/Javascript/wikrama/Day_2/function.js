const testFunction = () => {
    console.log('Saya berasal dari function.js');

};

const newFunction = (message) => {
    console.log(message);
};

module.exports = { //jika mau mengeskport banyak
    testFunction,
    newFunction
}