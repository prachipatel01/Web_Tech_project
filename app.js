const fs = require('fs');
const http = require('http');
//const { dirname } = require('path');
const url = require('url');

const replace_items = (temp,product) =>{
    let output = temp.replace(/{%TEXT%}/g, product.text);
    output = output.replace(/{%NAME%}/g,product.name);
    return output;
}

const replaceTemplate = (temp,product) => {
    let output = temp.replace(/{%STARTUP_NAME%}/g, product.name);
    output = output.replace(/{%ID%}/g, product.id);
    output = output.replace(/{%DETAILS%}/g, product.details);
    output = output.replace(/{%DESCRIPTION%}/g, product.description);
    output = output.replace(/{%LOCATION%}/g, product.location);
    output = output.replace(/{%FOCUS_INDUSTRY%}/g, product.focusIndustry);
    output = output.replace(/{%FOCUS_SECTOR%}/g, product.focusSector);
    output = output.replace(/{%SERVICE_AREA%}/g, product.serviceArea);
    output = output.replace(/{%STAGE%}/g, product.stage);
    output = output.replace(/{%YEARS%}/g, product.noActiveYears);
    output = output.replace(/{%RATINGS%}/g, product.ratings);
    output = output.replace(/{%IMGID%}/g, product.imgid);
    output = output.replace(/{%WEBSITE%}/g, product.website);

    const reviews = product.reviews.map(el => replace_items(`<li class="list-group-item">{%TEXT%}</li>`, el)).join('');
    output = output.replace(/{%REVIEWS%}/g, reviews);

    const phone = product.contact.phone.map(el => replace_items(`<li>{%TEXT%}</li>`, el)).join('');
    output = output.replace(/{%PHONE%}/g, phone);

    const email = product.contact.email.map(el => replace_items(`<li>{%TEXT%}</li>`, el)).join('');
    output = output.replace(/{%EMAIL%}/g, email);

    const LinkedIn = product.contact.LinkedIn.map(el => replace_items(`<li><a href="{%TEXT%}">{%TEXT%}</a></li>`, el)).join('');
    output = output.replace(/{%LINKEDIN%}/g, LinkedIn);

    const members = product.members.map(el => replace_items(`<div class="media text-muted pt-3">
    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
      <strong class="d-block text-gray-dark">{%NAME%}</strong>
      {%TEXT%}
    </p>
    </div>`, el)).join('');
    output = output.replace(/{%MEMBERS%}/g, members);

    return output;

}


//console.log(`${__dirname}`);
const home = fs.readFileSync(`${__dirname}\\index.html`,'utf-8');
const index_css = fs.readFileSync(`${__dirname}\\assets\\css\\index.css`,'utf-8');
const index_js = fs.readFileSync(`${__dirname}\\assets\\js\\index.js`,'utf-8');
const startups_css = fs.readFileSync(`${__dirname}\\assets\\css\\startups.css`,'utf-8');
const startup_page_css = fs.readFileSync(`${__dirname}\\assets\\css\\startup_page.css`,'utf-8');
const startup_page_js = fs.readFileSync(`${__dirname}\\assets\\js\\startup_page.js`,'utf-8');
const startups = fs.readFileSync(`${__dirname}\\startups.html`,'utf-8');
const startups_js = fs.readFileSync(`${__dirname}\\assets\\js\\startups.js`,'utf-8');
const startup_page = fs.readFileSync(`${__dirname}\\startup_page.html`,'utf-8');
const startupcard = fs.readFileSync(`${__dirname}\\startupcard.html`,'utf-8');

const data = fs.readFileSync(`${__dirname}\\assets\\data\\startups_data.json`,'utf-8');
const dataObj = JSON.parse(data);

const server = http.createServer((req,res) => {
    const {query, pathname} = url.parse(req.url , true);

    if(pathname==='/' || pathname==='/Home'){
        res.writeHead(200, {'Content-type':'text/html'});
        res.end(home);
    }
    else if(pathname==='/startup'){

        const product = dataObj[query.id-1];
        const output = replaceTemplate(startup_page, product);

        res.writeHead(200, {'Content-type':'text/html'});
        res.end(output);
    }
    else if(pathname==='/startups'){
        //console.log(query);
        res.writeHead(200, {'Content-type':'text/html'});

        const cardHtml = dataObj.map(el => replaceTemplate(startupcard, el)).join('');
        const output = startups.replace(/{%PRODUCT_CARDS%}/,cardHtml);
        res.end(output);
    }
    else if(pathname==='/assets/css/index.css'){
        res.writeHead(200, {'Content-type':'text/css'});
        res.end(index_css);
    }
    else if(pathname==='/assets/css/startups.css'){
        res.writeHead(200, {'Content-type':'text/css'});
        res.end(startups_css);
    }
    else if(pathname==='/assets/css/startup_page.css'){
        res.writeHead(200, {'Content-type':'text/css'});
        res.end(startup_page_css);
    }
    else if(pathname==='/assets/js/index.js'){
        res.writeHead(200, {'Content-type':'text/js'});
        res.end(index_js);
    }
    else if(pathname==='/assets/js/startup_page.js'){
        res.writeHead(200, {'Content-type':'text/js'});
        res.end(startup_page_js);
    }
    else if(pathname==='/assets/js/startups.js'){
        res.writeHead(200, {'Content-type':'text/js'});
        res.end(startups_js);
    }
    else if(pathname==="/images"){

        const image=query.image;

        fs.readFile(`${__dirname}\\assets\\images\\${image}`,function(err,content){
            if (err) {
                res.writeHead(400, {'Content-type':'text/html'})
                console.log(err);
                res.end("No such image");    
            } else {
                //specify the content type in the response will be an image
                res.writeHead(200,{'Content-type':'image/jpg'});
                res.end(content);
            }
        })
    }
    else{
        res.writeHead(404,{
            'Content-type':'text/html',

        });
        res.end('<h1>Page not found</h1>');
    }

});

server.listen(8000,'127.0.0.1', ()=>{
    console.log('listening to requests on port 3000');
});