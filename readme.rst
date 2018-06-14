#################################################
Management System for Gead General Trading (MSGT)
#################################################
This is a Software Engineering I Course Project at Addis Ababa University, Institute of Technology
*******************
Team Members
*******************
- Adiam Geberselassie
- Afrah Awol
- Biruk Wondirad
- Eyuel Berga
- Jemila Ibrahim
- Yanet Endale
*******************
Advisor
*******************
- Mr. Fistum Alemu
*****************************************************************************************************************************************************
About the Project
*****************************************************************************************************************************************************
The main objective of the project is to develop a user-friendly computerized system which will enable
the company[Gead General Trading] to run its business with minimal workload.

In the existing system, when new goods come to the store, they are manually counted and recorded on paper.
Then they will be transferred to a storage facility. The stock manager and sales-person will issue copies of the
recorded list. When a customer buys items from the store, the sales-person will look at the list and see if the
item requested exists in storage. This might take a long time if the list is long. If the item is found, the salesperson will deduct the amount requested and will inform the stock-manager to take the items out of storage.
Then, the stock-manager will take the items out, and will deduct the amount from his/her copy of the stock-list. The sales-person will also issue the customer a receipt. Two copies of the same receipt are made, one will
be given to the customer as a conformation of transaction and the other will be documented.

At the end of each working day, the manager will compare the two copies of the stock-list given to the stockmanager and the sales-person. The manager will be responsible for making sure that the amount of goods listed
in both lists is identical. He/she will also check for any irregularities in the transactions made throughout the
day by going through every documented receipts. At the end of every week, the manager is required to present
a report on the state of the business. He/she will refer to the paper-documented results collected so far and
manually calculate profits or losses.

One of the issues of the existing system is the use of paper-based documentation for transactions and stock
information. Paper-based systems will limit the collaboration between the staff. Understanding the changes
that other staff members made requires exhaustively going through papers. This makes it very hard for the staff
members to communicate effectively.
Second problem of using this system is that it leads to a lot of damage. Paper-based documents can be damaged
from the wear and tear of regular handling, which makes it a very unreliable mechanism for handling important
issues.

The Existing system also involves vast amount of mathematical works that are mostly done manually. This
will in turn introduce human errors to the system. This has many consequences to the business. It would be
very hard and time consuming to check for errors. Even if errors were found, correcting them is also a hurdle.
In some cases, the errors may not even be discovered, which means the company will be forced to pay a higher
or lower amount of taxes than it is required. Which is illegal in both ways and affect the business and the
country as well.

The other issue is in knowing the exact financial state of the business which is a very time-consuming activity.
The main aim of business owner is to make a profit and most businesses use their previous sales and marketing
plans to make future decisions. But the current system does not enable the company to know if their past
decisions are good or not, in an acceptable amount of time. So, they will resort to pure instincts in making this
important decision, rather than logically assessing them.
*****************************************************************************************************************************************************
Proposed System
*****************************************************************************************************************************************************
In the new system, when new goods come to the store the stock manager will add them to the system through
the GUI (graphical user interface) and they will be transferred to a storage facility. When a customer buys an
item from the store, the salesperson will use the system to add a transaction and notify the stock manager to
deliver the items from storage. Then the salesperson will confirm the transaction and will also print the receipt
for the customer.
The manager will use the new system to oversee all activities happening at the store. He/she will log in to the
system and will be able to view and update staff information and also get comprehensive sales data report. At
the end of each week the manager will be able to view or print the system generated report.
*****************************************************************************************************************************************************
Implementation
*****************************************************************************************************************************************************
The implementation of MSGT will take the MVC (Model-View-Controller) system architecture. MVC is a
software approach that separates application logic from presentation.

The first reason we chose this particular architecture is that it allows the separation of task. This will help us
to implement different parts of the application without worrying about integration issues. Due to the separation
of logic and presentation, the team will be able to independently implement the different parts of the
application. This will help in making the implementation phase fast.

Maintenance will also be fairly easy, as it will not require a complete change in the whole system. Using this
architecture allows us to make changes to the implementations of controllers and models without making any
changes to the views. It also allows us to change the appearance to the views without any changes to the other
parts of the application.

The development of the MSGT system will take on an object oriented approach together with the model-viewcontroller architectural pattern. We will be using the unified modeling language (UML) for constructing the
design models. We will use the principle of decoupling to ensure the maintainability of the system.
We will also be using different frameworks in the implementation of the system. Codeigniter will be used as
the application framework for the back-end implementation of the system. We will also be using Bootstrap for
implementing the front-end part of the system.
