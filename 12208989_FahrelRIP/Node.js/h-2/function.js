const testFunction = () => 
{
    console.log('Saya berasal dari function.js')
}

const newFunction = (message)=> 
{
    console.log(message);
}

//meng-exports function
module.exports = 
{
    testFunction,
    newFunction
}