//load data
var data=data;
var num_cards=0;
var list=document.getElementsByClassName("row row-cols-1 row-cols-md-2")[0];

function create_element(data)
{
    let div1=document.createElement("div");
    div1.className="col mb-4";

    let div2=document.createElement("div");
    div2.className="card";

    let img=document.createElement("img");
    img.src=data.src;

    let div3=document.createElement("div");
    div3.className="card-body";

    let h5=document.createElement("h5");
    h5.className="card-title";
    h5.innerText=data.name;

    let p=document.createElement("p");
    p.className="card-text";
    p.innerText=data.details;

    let div4=document.createElement("div");
    div4.className="card-body";
    
    let a=document.createElement("a");
    a.className="btn btn-primary";
    a.innerText="click here to get more info";
    //console.log("data.name="+data.name);
    //a.addEventListener("click",move_page(data.name));
    a.href="startup_page.html";

    div4.appendChild(a);

    div3.appendChild(h5);
    div3.appendChild(p);

    div2.appendChild(img);
    div2.appendChild(div3);
    div2.appendChild(div4);

    div1.appendChild(div2);

    list.appendChild(div1);
}

function create_data()
{
    let cnt=0;
    while(data[cnt]!=null)
    {
        create_element(data[cnt]);
        cnt++;
    }
}

create_data();
//load data



// filter
var userinput=document.getElementsByClassName("userinput")[0];

function search_startup()
{
    let i=0;
    while(data[i]!=null)
    {
        //console.log(data[i]);
        //console.log(data[i].name+" "+userinput);
        if(data[i].name===userinput.value)
        {
            list.innerHTML="";
            create_element(data[i]);
            break;
        }
        i++;
    }
}


var search=document.getElementsByClassName("search-btn")[0];
