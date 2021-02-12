package com.marsh.dao;

import com.marsh.bean.Customer;

public interface BankingDao {

	boolean createCustomer(Customer cust);

	double getBalance(long accNo);

	
	long getAccNo(long accNo1);

	double setBalance(long acc, double amt);

	



}
