const groupBy = keys => array =>
    array.reduce((objectsByKeyValue, obj) => {
        const value = keys.map(key => obj[key]).join('-');
        objectsByKeyValue[value] = (objectsByKeyValue[value] || []).concat(obj);
        return objectsByKeyValue;
    }, {});

const groupByDepartmentId = groupBy(['department_id']);
const groupByJobRoleId = groupBy(['job_role_id']);
const groupByLocationId = groupBy(['location_id']);

function filterJobsArray() {
    let department = document.getElementById("departments").selectedOptions[0]
    department = {
        id: department.value,
        name: department.innerHTML
    }
    let location = document.getElementById("locations").selectedOptions[0]
    location = {
        id: location.value,
        name: location.innerHTML
    }
    let role = document.getElementById("job-roles").selectedOptions[0]
    role = {
        id: role.value,
        name: role.innerHTML
    }
    let jobs = window.jobs
    if (department.id !== '') jobs = jobs.filter(job => job.department_id == department.id)
    if (location.id !== '') jobs = jobs.filter(job => job.location_id == location.id)
    if (role.id !== '') jobs = jobs.filter(job => job.job_role_id == role.id)
    return jobs
}

function generateJobItem (title, location, role, link) {
    return (
    `<tr>
        <td class="col-md-6 text-capitalize">
            ${title}
        </td>
        <td class="col-md-2 text-capitalize">
            ${location}
        </td>
        <td class="col-md-2 text-capitalize">
            ${role}
        </td>
        <td class="col-md-2">
            <a href="${link}" class="text-capitalize">See Job Details</a>
        </td>
    </tr>
    `
    )
}

function generateDepartmentJobsList (departmentName, departmentJobs) {
    let jobItems = ""
    for (const job of departmentJobs) {
        jobItems += generateJobItem(job.title, job.location.name, job.job_role.name, "/job-opportunities/" + job.id)
    }
    const strippedName = departmentName.replace(' ', '')
    return (
        `<div class="accordion-item">
            <h2 class="accordion-header" id="${strippedName}_heading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#${strippedName}_jobs" aria-controls="${strippedName}_jobs">
                    ${departmentName}
                    <span>${departmentJobs.length} open job(s)</span>
                </button>
            </h2>
            <div id="${strippedName}_jobs" class="accordion-collapse collapse" aria-labelledby="${strippedName}_heading" data-bs-parent="#jobs">
                <div class="accordion-body table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Location</th>
                                <th scope="col">Role</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            ${jobItems}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        `
    )
}

function generateComponent () {
    const jobs = filterJobsArray()
    const jobsGroupedByDepartment = groupByDepartmentId(jobs)
    const jobsGropuedByJobRole = groupByJobRoleId(jobs)
    const jobsGropuedByLocation = groupByLocationId(jobs)
    const availableDepartments = Object.keys(jobsGroupedByDepartment)
    const availableJobRoles = Object.keys(jobsGropuedByJobRole)
    const availableLocations = Object.keys(jobsGropuedByLocation)
    let departmentJobsList = ""
    for (const departmentId of availableDepartments) {
        const departmentName = window.departments.find(department => department.id == departmentId).name
        departmentJobsList += generateDepartmentJobsList(departmentName, jobsGroupedByDepartment[departmentId])
    }
    return {
        availableDepartments,
        availableLocations,
        availableJobRoles,
        jobs: departmentJobsList
    }
}

function render () {
    const component = generateComponent()
    document.getElementById('jobs').innerHTML = component.jobs
    const departmentOptions = document.getElementById('departments').options
    //we have started index from "1" because the first option is the default and place holder
    for (let index = 1; index < departmentOptions.length; index++) {
        const option = departmentOptions[index];
        const isDepartmentAvailable = component.availableDepartments.includes(option.value)
        if (!isDepartmentAvailable) option.disabled = true
        else option.disabled = false
    }
    const locationOptions = document.getElementById('locations').options
    //we have started index from "1" because the first option is the default and place holder
    for (let index = 1; index < locationOptions.length; index++) {
        const option = locationOptions[index];
        const isLocationAvailable = component.availableLocations.includes(option.value)
        if (!isLocationAvailable) option.disabled = true
        else option.disabled = false
    }
    const jobRoleOptions = document.getElementById('job-roles').options
    //we have started index from "1" because the first option is the default and place holder
    for (let index = 1; index < jobRoleOptions.length; index++) {
        const option = jobRoleOptions[index];
        const isJobRoleAvailable = component.availableJobRoles.includes(option.value)
        if (!isJobRoleAvailable) option.disabled = true
        else option.disabled = false
    }
}
render()
document.getElementById('departments').addEventListener('change', render)
document.getElementById('locations').addEventListener('change', render)
document.getElementById('job-roles').addEventListener('change', render)