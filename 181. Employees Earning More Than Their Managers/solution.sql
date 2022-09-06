# Write your MySQL query statement below
SELECT
    Employee.Name as Employee
FROM
    Employee
INNER JOIN
    Employee as Managers ON Employee.ManagerId = Managers.Id
WHERE
    Employee.Salary > Managers.Salary