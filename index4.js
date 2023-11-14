getApplicants=()=>{

    let url="http://localhost/JOBB/phpfiles/index4.php";
    let xhr = new XMLHttpRequest();
    xhr.open('GET',url,true);
    xhr.onload=()=>{ 
       let appdata = document.querySelector('.table-app'); 
       let updateTable = document.querySelector('.update');
    //    let tableRow = document.querySelector('.add-here'); 
       if(xhr.readyState==4 || xhr.status==200)
       {
           let reponse = JSON.parse(xhr.responseText);
           let {Users} = reponse;
           Users.map(ur=>{ 


              let rowHolder = document.createElement('tr');
              let deleteBtn = document.createElement('BUTTON');
              var text = document.createTextNode("Delete");
              let updateBtn = document.createElement('BUTTON');
              var updatetext = document.createTextNode("Update");
              let {Applicants,Category,Company,Job,Location,Type,User} = ur;
               let Applicant = document.createElement('td');
               let Apptxt = document.createTextNode(Applicants);
               let Cat = document.createElement('td');
               let Cattxt = document.createTextNode(Category);
               let comp = document.createElement('td');
               let comptxt= document.createTextNode(Company);
               let jobb = document.createElement('td');
               let jobtxt = document.createTextNode(Job);
               let loc = document.createElement('td');
               let locTxt = document.createTextNode(Location);
               let typ = document.createElement('td');
               let typTxt = document.createTextNode(Type);
               let us = document.createElement('td');
               let ustxt  = document.createTextNode(User);
           
               let applicantE = document.getElementById('Applicants');
               let categoryE = document.getElementById('Category');
               let companyE = document.getElementById('Company');
               let jobE = document.getElementById('Job');
               let locationE = document.getElementById('Location');
               let typeE = document.getElementById('Type');
               let userE = document.getElementById('User');

               appdata.appendChild(rowHolder);

               Applicant.appendChild(Apptxt);
               Cat.appendChild(Cattxt);
               comp.appendChild(comptxt);
               jobb.appendChild(jobtxt);
               loc.appendChild(locTxt);
               typ.appendChild(typTxt);
               us.appendChild(ustxt);
               deleteBtn.appendChild(text);
               updateBtn.appendChild(updatetext);

               appdata.appendChild(Applicant);
               appdata.appendChild(Cat);
               appdata.appendChild(comp);
               appdata.appendChild(jobb);
               appdata.appendChild(loc);
               appdata.appendChild(typ);
               appdata.appendChild(us);
               appdata.appendChild(deleteBtn);
               appdata.appendChild(updateBtn);

               deleteBtn.addEventListener('click',(e)=>{
                  e.preventDefault();
                  let data = {"id":Applicants};
                  let frmdata = JSON.stringify(data);
                  let xhr = new XMLHttpRequest();
                  let url2 = 'http://localhost/JOBB/phpfiles/delete.php';
                  xhr.open('DELETE',url2,true);
                  xhr.onload=()=>{
                     if(xhr.readyState==4 || xhr.status==200)
                     {
                        let msgsection = document.querySelector('#applicant-data');
                        let msg = document.createElement('h2');
                        let msgtxt = document.createTextNode('Applicant Deleted');
                        msg.appendChild(msgtxt);
                        msgsection.appendChild(msg);
                     }
                     else
                     {
                        let msgsection = document.querySelector('#applicant-data');
                        let msg = document.createElement('h2');
                        let msgtxt = document.createTextNode('Error Occured');
                        msg.appendChild(msgtxt);
                        msgsection.appendChild(msg);
                     }
                  }
                  xhr.send(frmdata);
               });
               updateBtn.addEventListener('click',(e)=>{

                  updateTable.style.display = 'block';
                  applicantE.value = Applicants;
                  categoryE.value = Category;
                  companyE.value = Company;
                  jobE.value = Job;
                  locationE.value = Location;
                  typeE.value = Type;
                  userE.value = User;

               });
            });
       }
    } 
    xhr.send();
}
getApplicants(); 