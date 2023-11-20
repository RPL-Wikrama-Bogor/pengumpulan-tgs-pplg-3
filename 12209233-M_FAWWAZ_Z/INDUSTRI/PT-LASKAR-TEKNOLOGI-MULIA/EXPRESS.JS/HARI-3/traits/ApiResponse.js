const responseNotFound = () => {
    responseNotFound.status(404).json({
        succes: false,
        message: 'Not Found'
    })
}

const responseSucces = (res, result, message) => {
    res.status(200).json({
        succes: true,
        message: message,
        data: result
    })
}

const responseFailValidate = (res, message) => {
    return res.status(400).json({
        succes: false,
        message: message
    })
} 

const responseAuthSucces = (res, token, message, user) => {
    return res.status(200).json({
        succes: true,
        token: token,
        message: message,
        user: user
    })
}

module.exports = {
    responseNotFound,
    responseSucces,
    responseFailValidate,
    responseAuthSucces
}