const { MyPromise, panggilPromise } = require("./data");

var http = require("http");

var server = http.createServer(function (req, res) {
  switch (req.url) {
    case "/home":
      res.write("Hi, Selamat datang di nodejs");
      res.end();
      break;

    case "/test-promise":
      (async () => {
        await panggilPromise()
          .then((data) => {
            data.forEach((element) => {
              res.write(element.author+'\n');
            
            });

            //ini juga bisa kokk
            // for (let i = 0; i < data.length; i++) {
            //     res.write(data[i].author)
                
            // }
            // console.log(data)
            res.end();
          })
          .catch((error) => {
            console.log(error);
          });
        // await panggilPromise(6, 1000).then((data) => {
        //     console.log(data)
        // }).catch((error) => {
        //     console.log(error)
        // })
        // await panggilPromise(7, 1000).then((data) => {
        //     console.log(data)
        // }).catch((error) => {
        //     console.log(error)
        // })
      })();
      //   res.write("berhasil memanggil promise, promise akan muncul di terminal");
      //   res.end();
      break;
    default:
      res.write("url tidak ditemukan");
      res.end();
      break;
  }
});

const port = 5000;

server.listen(port);

console.log(`Server running on port ${port}`);
