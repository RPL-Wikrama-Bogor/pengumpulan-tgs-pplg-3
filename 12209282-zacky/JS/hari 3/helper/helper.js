const responseNotFound = (res) => {
    res.status(404).json({
        seccess:false,
        message:'Not Found'
    })
}

const responseSuccess = (res, result, message) => {
    return res.status(200).json({
        success: true,
        massage: message,
        data: result
    })
}

module.exports = {
    responseNotFound,
    responseSuccess
}