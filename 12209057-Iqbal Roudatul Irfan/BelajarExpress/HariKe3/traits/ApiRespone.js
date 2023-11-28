const responseNotfound = (res) => {
    res.status(404).json({
        succes: false,
        message: "Resource not found"
    });
};

const responseSucces = (res,result,message) => {
    res.status(200).json({
        succes: true,
        message: message,
        data: result
    })
}

