async function Get(url){
    print(url);
    return await fetch(url).then((res)=> res.json());
}

export { Get };