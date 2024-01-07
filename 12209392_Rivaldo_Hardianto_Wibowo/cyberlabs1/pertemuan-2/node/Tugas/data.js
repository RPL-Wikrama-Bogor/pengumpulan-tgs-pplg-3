

const data = [
    { book: 'To Kill a Mockingbird', author: 'Harper Lee', genre: 'Fiction' },
    { book: '1984', author: 'George Orwell', genre: 'Dystopian' },
    { book: 'The Great Gatsby', author: 'F. Scott Fitzgerald', genre: 'Classic' },
    { book: 'Harry Potter and the Sorcerer\'s Stone', author: 'J.K. Rowling', genre: 'Fantasy' },
    { book: 'The Catcher in the Rye', author: 'J.D. Salinger', genre: 'Literary Fiction' },
    { book: 'The Lord of the Rings', author: 'J.R.R. Tolkien', genre: 'Fantasy' },
  ]

  const dataarr = data.filter((data) => data.genre =='Fantasy')
  const datar = data.filter((data) => data.author)

  const MyPromise = new Promise((resolve, reject) => {
    setTimeout(() => {
        if(dataarr){
            resolve(dataarr)
        }else{
            reject('tidak ada data yang tersedia')
        }
    }, 1000)    
})


const panggilPromise = () => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            // resolve(dataarr)
            if(dataarr){
                resolve(dataarr)
            }else{
                reject('tidak ada novel fantasy')
            }
        }, 1000)
    })
}

module.exports = {
    MyPromise,
    panggilPromise
}