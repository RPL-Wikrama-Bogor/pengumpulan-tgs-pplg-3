const peopleData = require('./data');

const under = async () => {
  return new Promise((resolve) => {
    setTimeout(() => {
      const filteredPeople = peopleData.filter(person => person.age < 30 && person.city === 'Los Angeles');
      resolve(filteredPeople);
    }, 5000);
  });
};

const main = async () => {
  try {
    const result = await under();
    console.log(JSON.stringify(result, null, 2));
  } catch (error) {
    console.error('Error:', error);
  }
};

main();
