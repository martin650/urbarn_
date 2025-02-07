## Vehicle Rental System
### Description
The Vehicle Rental System is a web-based application designed to manage vehicle rentals, customer information, and rental agreements. It provides a user-friendly interface for both customers and administrators, ensuring secure and efficient management of vehicle rental operations. This system focuses on data protection, user authentication, and payment security to ensure a safe environment for both users and administrators.

### Key Features
#### Vehicle Management
- Add, edit, and delete vehicles from the inventory.
- Track vehicle availability, maintenance records, and insurance information.
- Categorize vehicles by type (e.g., cars, trucks, motorcycles).
#### Customer Management
- Create and manage customer profiles.
- Store customer contact information, rental history, and payment details securely.
- Protect sensitive customer data through encryption and secure data storage.
#### Rental Agreement Management
- Generate rental agreements with customizable templates.
- Record rental periods, rental rates, and additional charges.
- Track rental returns and damages to maintain proper records.
#### Payment Processing
- Integrated with secure payment gateways for handling transactions.
- Ensures PCI-DSS compliance for secure payment processing.
- SSL/TLS encryption protects payment data during transmission.
### Role-Based Access Control
- Administrators can manage vehicles, customers, and rental agreements.
- Customers can view vehicles and manage their own rental agreements.
- Access control is implemented based on role-based access control (RBAC), ensuring users have only the necessary privileges to perform their tasks.
#### Reporting
- Generate reports on rental statistics, revenue, and vehicle utilization.
- Provides administrators with insights into business performance and vehicle utilization.
### Security Features
- Data Encryption: Customer data, including personal information and payment details, is stored using industry-standard encryption methods to prevent unauthorized access.
- Secure Authentication: The system employs secure user authentication mechanisms, including session management and password hashing to ensure that user credentials are safely handled.
- SQL Injection Protection: To protect against SQL injection attacks, the system uses parameterized queries and prepared statements when interacting with the database.
- Cross-Site Scripting (XSS) and Cross-Site Request Forgery (CSRF) Prevention: The application incorporates secure coding practices to prevent common web vulnerabilities such as XSS and CSRF.
- SSL/TLS Encryption: All communication between the client and server is encrypted using SSL/TLS protocols, ensuring secure data transmission over the network.
- Payment Security: The system integrates with PCI-DSS compliant payment gateways to handle transactions securely, with sensitive data being protected via tokenization and never stored on the server.
#### Technology Stack
- Frontend: HTML, CSS, JavaScript
- Backend: PHP
- Database: MySQL
### Security:
- Encryption: Implemented for sensitive data storage (e.g., customer information, payment details).
- Prepared Statements: Used to prevent SQL injection.
- SSL/TLS: Secures data transmission between the client and server.
- Session Management: Manages user authentication and access control.
- Hashing: Passwords are hashed before being stored, ensuring safe authentication.
